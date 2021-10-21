        var menuBtn = document.getElementById("menuBtn")
        var sideNav = document.getElementById("sideNav")
        var mmenu = document.getElementById("menu")

        sideNav.style.right = "-250px";

        menuBtn.onclick = function() {
            if (sideNav.style.right == "-250px") {
                sideNav.style.right = "0";
                menu.src = "images/CloseMenu.png"
            } else {
                sideNav.style.right = "-250px";
                menu.src = "images/MenuButton.png"
            }
        }

        //Footer JavaScript Data Injection

        var days = 'Monday to Saturday ';
        var hours = '- 10am to 5:30pm';
        var workdays = days + hours;
        var workdaysEl = document.getElementById('workdays');

        workdaysEl.textContent = workdays;

        var inTouchAddy = '3245 N. Martin Luther King Dr.';
        var inTouchAddyEl = document.getElementById('inTouchAddy');

        inTouchAddyEl.textContent = inTouchAddy;

        var inTouchEmail = 'stylebyjinfo@gmail.com';
        var inTouchEmailEl = document.getElementById('inTouchEmail');

        inTouchEmailEl.textContent = inTouchEmail;

        var inTouchNumber = '414-923-2993'
        var inTouchNumberEl = document.getElementById('inTouchNumber');

        inTouchNumberEl.textContent = inTouchNumber;