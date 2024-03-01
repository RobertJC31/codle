function triggerDisplay(triggerElementID, targetElementID, style, includeChildren) {
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

function triggerDisplayAndTrigger(triggerElementID, targetElementID, style, includeChildren, triggerClass, initialTriggerElementID) {
    let triggerElement = document.getElementById(triggerElementID);
    let initialTriggerElement = document.getElementById(initialTriggerElementID);
    let targetElement = document.getElementById(targetElementID);

    if (triggerElement && targetElement) {
        triggerElement.addEventListener('click', function(event) {
            if ((triggerElement !== event.target) && !(includeChildren)) {
                return;
            }

            if (style !== "none") {
                initialTriggerElement.classList.add(triggerClass);
            } else {
                initialTriggerElement.classList.remove(triggerClass)
            }

            targetElement.style.display = style;

        })

    } else {
        console.error("One of the specified elements not found.");
    }
}