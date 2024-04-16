
const books = [
    // Existing books
    { title: "It ends with us", type: "Romance, Fictional", price: "₹ 200", imageUrl: "images\\it end with us.png", link: "itends_withus.html" },
    { title: "Rich Dad Poor Dad", type: "Psychology", price: "₹ 250", imageUrl: "images\\rich dad poor dad.png", link: "richdad_poordad.html" },
    { title: "The Power of your subconscious mind", type: "Psychology", price: "₹ 200", imageUrl: "images\\power of subco mind.png", link: "powerof_submind.html" },
    { title: "The Girl who knew too much", type: "Fiction, Romance", price: "₹ 150", imageUrl: "images\\the girl know too much.png", link: "thegirlwho_knewtoomuch.html" },
    { title: "Half Girlfriend", type: "Novel, Romance", price: "₹ 150", imageUrl: "images\\half girlfriend.png", link: "half_girlfriend.html" },
    { title: "The Mystery of the Hidden Lab", type: "Mystery, Suspense", price: "₹ 200", imageUrl: "images\\the mystery of hidden lab.png", link: "mystery_ofhiddenlab.html" },
    { title: "The Incarcerations", type: "Political Freedom, Security", price: "₹ 300", imageUrl: "images\\TheIncarcerations.png", link: "TheIncarcerations.html" },
    // Fiction books
    // { title: "That Night", type: "Fiction", price: "₹ 200", imageUrl: "../../images/fictionBooks/That Night.png", link: "that_night.html" },
    // { title: "The Palace of Illusions", type: "Fiction", price: "₹ 250", imageUrl: "../../images/fictionBooks/The Palace Of Illusions.png", link: "ThePalace_ofIllusions.html" },
    // { title: "The Law of Attraction", type: "Fiction", price: "₹ 310", imageUrl: "../../images/fictionBooks/The Law Of Attraction.png", link: "TheLaw_ofAttraction.html" },
    // { title: "Trust No One", type: "Fiction", price: "₹ 190", imageUrl: "../../images/fictionBooks/Trust No One.png", link: "Trust_NOone.html" },
    // { title: "The Girl in Seat 2A", type: "Fiction", price: "₹ 300", imageUrl: "../../images/fictionBooks/Girl in Seat 2A.png", link: "Girl_inSeat_2A.html" },
    // { title: "Days at the Morisaki Bookshop", type: "Fiction", price: "₹ 220", imageUrl: "../../images/fictionBooks/Days at the Morisaki Bookshop.png", link: "DaysAtThe_MorisakiBookshop.html" },
    // { title: "You Only Live Once", type: "Fiction", price: "₹ 170", imageUrl: "../../images/fictionBooks/You Only Live Once.png", link: "YouOnly_LiveOnce.html" },
    // // Romantic Books
    // { title: "Always the Bridesmaid", type: "Romantic", price: "₹ 1500", imageUrl: "../../images/RomanticBooks/Always the Bridesmaid.png", link: "Always_theBridesmaid.html" },
    // { title: "The Secret Fiancee", type: "Romantic", price: "₹ 1999", imageUrl: "../../images/RomanticBooks/The Secret Fiancee.png", link: "The_SecretFiancee.html" },
    // { title: "The Lies of Eternity Love", type: "Romantic", price: "₹ 250", imageUrl: "../../images/RomanticBooks/The Lies of EternityLove.png", link: "TheLies_ofEternityLove.html" },
    // { title: "The Wrong Wife", type: "Romantic", price: "₹ 230", imageUrl: "../../images/RomanticBooks/The Wrong Wife.png", link: "The_wrongWife.html" },
    // { title: "A Touch of Eternity", type: "Romantic", price: "₹ 799", imageUrl: "../../images/RomanticBooks/A Touch of Eternity.png", link: "TheTouch_ofEternity.html" },
    // { title: "Until Forever", type: "Romantic", price: "₹ 570", imageUrl: "../../images/RomanticBooks/Until Forever.png", link: "UntilForever.html" }
];

function displayBooks(booksData) {
    const bookBox = document.getElementById("bookBox");
    bookBox.innerHTML = ""; // Clear previous book items

    booksData.forEach(book => {
        const bookItem = `
            <div class="book">
                <a href="${book.link}">
                    <img src="${book.imageUrl}" alt="${book.title}" height="200px" width="135px" >
                    <p class="small_para">${book.title}</p>
                    <pre class="small_pre">${book.type}</pre>
                    <p class="small_para">${book.price}</p>
                </a>
            </div>
        `;
        bookBox.insertAdjacentHTML("beforeend", bookItem);
    });
}

function searchBooks(query) {
    const filteredBooks = books.filter(book => {
        return book.title.toLowerCase().includes(query.toLowerCase()) || book.type.toLowerCase().includes(query.toLowerCase());
    });
    displayBooks(filteredBooks);
}

displayBooks(books);