function addListenerToTriggerDisplay(triggerElementID, targetElementID, style, includeChildren) {
    let triggerElement = document.getElementById(triggerElementID);
    let targetElement = document.getElementById(targetElementID);

    if (triggerElement && targetElement) {
        triggerElement.addEventListener('click', function(event) {
            if ((triggerElement !== event.target) && !(includeChildren)) {
                return;
            }
            targetElement.style.display = style;

        })
    } else {
        console.error("One of the specified elements not found.");
    }
}