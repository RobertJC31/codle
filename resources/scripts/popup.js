function addListenerToTriggerDisplay(triggerElementID, targetElementID, style) {
    const triggerElement = document.getElementById(triggerElementID);
    const targetElement = document.getElementById(targetElementID);

    if (triggerElement && targetElement) {
        triggerElement.addEventListener('click', function() {
            targetElement.style.display = style;
        })
    } else {
        console.error("One of the specified elements not found.");
    }
}