$(document).ready(function(){
    alert('hi');
})

  function createCustomCursor() {
        var cursorElement = document.createElement('div');
        cursorElement.className = 'cursorCircle';
        document.body.appendChild(cursorElement);

        return cursorElement;
    }

    function updateCursorPosition(cursorElement, e) {
        var x = e.clientX;
        var y = e.clientY;

        setTimeout(function () {
            cursorElement.style.left = x + 'px';
            cursorElement.style.top = y + 'px';
        }, 300);
    }

    var customCursor = createCustomCursor();

    document.addEventListener('mousemove', function (e) {
        updateCursorPosition(customCursor, e);
    });