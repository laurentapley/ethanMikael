    </main>
        <footer>
            <div class="bottom-bar">
                <p>Ethan Mikael &copy; All rights reserved.</p><br>
                <!-- <p>Web Service by Whet Web</p> -->
            </div>
            <div class="social">
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-imdb"></a>
            </div>
        </footer>
        <script type="text/javascript">
        function classToggle(){
            //changed this line so that it just toggles which is the same as add and remove and inside the toggle the initial value is hide
            document.getElementById('dropdown-content').classList.toggle('hide');

        }
            document.getElementById('button').addEventListener('click', classToggle);

        window.onclick = function(event) {
            if (!event.target.matches('burger')) {
                var dropdown = document.getElementById('dropdown-content');
                var i;
                for (i = 0; i < dropdown.length; i++) {
                    var openDropdown = dropdown[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
        </script>
    </body>
</html>
