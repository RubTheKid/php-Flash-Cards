<main class = "main-entry">
    <h2 id = "enterNumber"> Enter a number: </h2>
    <form class = "main-entry__form"
        action = "<?php $_SERVER['PHP_SELF'] ?>" 
        method = "GET">

        <input
            class = "main-entry__input"
            id = "number"
            name = "number"
            type = "text"
            maxlenght = "2"
            autofocus
            required
        />
        <button class = "main-entry__button"> Go! </button>
        
    </form>
</main>
