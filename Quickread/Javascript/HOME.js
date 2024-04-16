function searchInput() {
    console.log("searchInput function called");
    document.querySelector("#searchbar").addEventListener("focus", function() {
        console.log("Search bar focused");
        var hiddenElement = document.querySelector(".hidden1");
        console.log("Hidden element:", hiddenElement);
        if (hiddenElement) {
            hiddenElement.style.display = "block";
        } else {
            console.log("Hidden element not found");
        }
    });
    document.querySelector("#searchbar").addEventListener("blur", function() {
        console.log("Search bar blurred");
        var hiddenElement = document.querySelector(".hidden1");
        console.log("Hidden element:", hiddenElement);
        if (hiddenElement) {
            hiddenElement.style.display = "none";
        } else {
            console.log("Hidden element not found");
        }
    });
}

searchInput();
