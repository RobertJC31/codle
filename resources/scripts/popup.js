function addListenerToTriggerDisplay(triggerElementID, targetElementID, style) {
    let triggerElement = document.getElementById(triggerElementID);
    let targetElement = document.getElementById(targetElementID);

    if (triggerElement && targetElement) {
        triggerElement.addEventListener('click', function(event) {
            if (triggerElement !== event.target) {
                return;
            }
            targetElement.style.display = style;

        })
    } else {
        console.error("One of the specified elements not found.");
    }
}