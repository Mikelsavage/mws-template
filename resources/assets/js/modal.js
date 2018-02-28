/**
 * Modal
 */

/**
 * Initialize modal
 */
var initializeModal = function() {
    var modal, modalClose, modalContainer, modalToggle;

    modal = $('.modal');
    modalContainer = $('.modal-container');
    modalToggle = $('.modal-toggle');
    modalClose = $('.modal .close');

    // Private Functions
    var closeModal = function() {
        modalContainer.removeClass('active');
    };

    var openModal = function() {
        modalContainer.addClass('active');
    };

    // Trigger to open mobile menu
    modalToggle.click(function(e) {
        e.preventDefault();

        openModal();
    });

    // Trigger to close mobile menu
    modalClose.click(function(e) {
        e.preventDefault();

        closeModal();
    });

    // Close modal when clicking on something other than modal
    $(document).click(function(e) {
        if (modalContainer.hasClass("active") && e.target.id == "modal-container") {
            closeModal();
        }
    });
};

initializeModal();