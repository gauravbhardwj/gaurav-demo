
<script>

window.addEventListener('DOMContentLoaded', () => {
  const navMenuList = document.querySelectorAll('.main-nav a');
    let url = window.location.href;
    navMenuList.forEach( (navMenu) => {
        if(url === (navMenu.href)) {
            // console.log(navMenu);
            navMenu.className += " active-menu";
        }
    })

    
})

</script>
<header>
    <nav>
      <div class="logo"><a href="index.php">Romania<span>.</span></a></div>
      <ul class="main-nav">
        <li><a href="index.php">About</a></li>
        <li><a href="rooms.php">Rooms</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contact1.php">Contact</a></li>
      </ul>
      <div class="burger-menu">
        <span class="lines"></span>
      </div>
    </nav>
  </header>