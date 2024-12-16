$(document).ready(function() {
    let unreadCount = 0;

    function fetchNotifications() {
        $.ajax({
            url: '/notifications',
            method: 'GET',
            success: function(data) {
                displayNotifications(data);
                const unreadNotifications = data.filter(notification => !notification.read);
                updateNotificationCount(unreadNotifications.length);
                unreadCount = unreadNotifications.length;
            },
            error: function(error) {
                console.error('Erreur lors de la récupération des notifications:', error);
            }
        });
    }

    function displayNotifications(notifications) {
        const container = $('.notification-box');
        container.empty();
        notifications.forEach(notification => {
            const formattedDate = formatDate(notification.created_at);
            const notificationElement = `
            <li class="d-flex justify-content-between align-items-center mb-2 ${notification.read ? '' : 'new-notification'}" data-read="${notification.read}">
              <a href="${notification.action_link}" class="notification-link" style="text-decoration: none; color: inherit;">
                <div class="notification-icon">
                  <i class="${notification.icon}"></i>
                </div>
                <div class="notification-content">
                  <strong>${notification.title}</strong>
                  <p>${notification.content}</p>
                  <small class="text-muted">${formattedDate}</small>
                </div>
              </a>
            </li>
            `;
            container.prepend(notificationElement);
        });
    }

    function updateNotificationCount(count) {
        const bellIcon = $('.notification-bell');
        if (count > 0) {
            bellIcon.attr('data-count', count).addClass('has-notifications');
        } else {
            bellIcon.removeAttr('data-count').removeClass('has-notifications');
        }
    }

    function formatDate(dateString) {
        const options = { year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit' };
        return new Date(dateString).toLocaleDateString('fr-FR', options);
    }

    fetchNotifications();
    setInterval(fetchNotifications, 60000);

    $('.notification-trigger').click(function() {
        console.log('Notification trigger clicked');
        $('.notification-box').toggleClass('opacity-0 pointer-events-none');
        if (!$(this).hasClass('opened')) {
            $(this).addClass('opened');
            console.log('Sending AJAX request to mark notifications as read for current user');
            $.ajax({
                url: '/mark-all-notifications-read',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log('Successfully marked notifications as read for current user');
                    fetchNotifications(); // Actualiser les notifications après avoir marqué comme lues
                },
                error: function(xhr, status, error) {
                    console.error('Error marking notifications as read for current user:', status, error);
                }
            });
        } else {
            updateNotificationCount(0);
        }
    });
});
