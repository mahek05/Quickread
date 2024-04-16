function addToCart() {
    
    var bookName = document.getElementById("bookName");
    var bookPrice = document.getElementById("price");

    var book = {
        title: bookName,
        price: bookPrice
    };

    var cart = JSON.parse(localStorage.getItem("cart") || "[]");
    cart.push(book);

    localStorage.setItem("cart", JSON.stringify(cart));

    alert("The book has been added to your cart!");
}
