<style>


.search input{
    height: 100%;
    width: 100%;
    font-size: 1.6rem;
    color:var(--black);
    padding:1rem;
    text-transform: none;
    border: 1px solid transparent;
    background-color: #94f7e6;
    border-radius: 50px;
    margin-top: 1rem;
    font-size: 1.2rem;
    font-weight: bold;
    font-style: italic;
    transition: transform 0.3s, box-shadow 0.3s;
    padding: 10px 20px;

}
#search-box.search input {
    color: red; /* Changez "red" par la couleur souhaitée */
}

.material-symbols-outlined .fa-search {
        color: black; /* Remplacez "black" par la couleur souhaitée pour l'icône de recherche */
    }

</style>
<div class="container">
        <div>
            <video autoplay muted loop plays-inline class="video" >
                <source src="nch.mp4" type="video/mp4" />
            </video>
        </div>
        <div>
            <header class="header">
                <div class="logo">
                    <a href="index.php"><span class="material-symbols-outlined">
                        diamond
                        </span></a>
                    <a href="index.php"><h2>Fashion</h2></a>
                </div>
                <nav class="nav">
                <a href="primer.php?id=1">Primer</a>
                <a href="primer.php?id=2">Foundation</a>
                <a href="primer.php?id=3">Eye liner</a>
                <a href="primer.php?id=4">Mascara</a>
                <a href="primer.php?id=5">Blush</a>
                <a href="primer.php?id=6">Highliter</a>
                <a href="primer.php?id=7">Lipstick</a>
                <a href="#">Contact US</a>
                </nav>
                <div class="icons">
                
                <a href="#"><span class="material-symbols-outlined">favorite</span></a>
                <a href="login.php"><span class="material-symbols-outlined">login</span></a>
                <a href="#"><span class="material-symbols-outlined">
                    shopping_cart
                    </span></a>
                
                </div>
                
                <div class="search">
                    <form action="index.php" method="POST">
                <input class="material-symbols-outlined" id="search-btn" type="search" id="search-box" placeholder="rechercher ici ..." name="Search">
                </form></div>
            
            </header>
            <script>
                const searchBtn = document.getElementById("search-btn");
                const SearchForm = document.querySelector(".search");
                searchBtn.addEventListener("click", () => {
                event.preventDefault(); // Empêche le comportement par défaut du lien
                SearchForm.classList.toggle("active");
                });
            </script>
            </div>
        <div class="maintext">
            <div class="leftside">
                <div class="first">
                    <p>Style is a way to say who you are without having to speak.</p>
                </div>
                <div class="second">
                    <h3>Get all the lastest trends clothes at an affordable rate. </h3>
                </div>
                <button>Shop Now <span class="material-symbols-outlined">
                    shopping_cart
                    </span></button>
            </div>
            <div class="rightside">
            </div>
        </div>
    </div>