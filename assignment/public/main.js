//cart
let cartIcon = document.querySelector("#cart_icon")
let cart = document.querySelector(".cart")
let closeCart = document.querySelector("#close_cart")

cartIcon.onclick = () => {
    cart.classList.add("active");
};

closeCart.onclick = () => {
    cart.classList.remove("active");
};

if(document.readyState == "loading"){
    document.addEventListener("DOMContentLoaded", ready);
}else{
    ready();
}

function ready(){
    var removeCartButtons = document.getElementsByClassName('cart_remove');
    console.log(removeCartButtons);
    for (var i = 0; i < removeCartButtons.length; i++){
        var button = removeCartButtons[i];
        button.addEventListener('click', removeCartItem);
    }
    var quantityInputs = document.getElementsByClassName("cart_quantity");
    for (var i = 0; i < quantityInputs.length; i++){
        var input = quantityInputs[i];
        input.addEventListener('change', quantityChanged);
    }
    var addCart = document.getElementsByClassName("add_cart");
    for (var i = 0; i < addCart.length; i++){
        var button = addCart[i];
        button.addEventListener('click', addCartClicked);
    }

    document.getElementsByClassName("btn_buy")[0].addEventListener("click",buyButtonClicked);
}

function buyButtonClicked() {
    // Redirect to a different page
    window.location.href = "text.php";

    // Pass the total amount to the next page as a query parameter
    var totalAmount = document.getElementsByClassName("total_price")[0].innerText.replace("£", "");
    window.location.href = "text.php?total=" + encodeURIComponent(totalAmount);
}

function removeCartItem(event){
    var buttonClicked = event.target;
    buttonClicked.parentElement.remove();
    updatetotal(); 
}

function quantityChanged(event){
    var input = event.target;
    if (isNaN(input.value) || input.value <= 0){
        input.value = 1;
    }
    updatetotal();
}

function addCartClicked(event){
    var button = event.target;
    var shopProducts = button.parentElement;
    var title = shopProducts.getElementsByClassName("product_title")[0].innerText;
    var price = shopProducts.getElementsByClassName("price")[0].innerText;
    var productImg = shopProducts.getElementsByClassName("product_img")[0].src;
    console.log(title,price,productImg);
    addProductsToCart(title,price,productImg);
    updatetotal();
}

function addProductsToCart(title,price,productImg){
    var cartShopBox = document.createElement("div");
    cartShopBox.classList.add("cart_box");
    sessionStorage.setItem("productTitle", title);
    var cartItems = document.getElementsByClassName("cart_content")[0]
    var cartItemsNames = cartItems.getElementsByClassName("cart_product_title");
    for (var i = 0; i < cartItemsNames.length; i++){
        if (cartItemsNames[i].innerText == title){
            alert("Item already add to cart");
            return;
        }
    }
    
    var cartBoxContent = `
                    <img src="${productImg}" alt="" class="cart_img">
                    <div class="details_box">
                        <div class="cart_product_title">${title}</div>
                        <div class="cart_price">${price}</div>
                        <input type="number" value="1" class="cart_quantity">
                    </div>
                    <i class="fa-solid fa-trash cart_remove"></i>`;
    cartShopBox.innerHTML = cartBoxContent;
    cartItems.append(cartShopBox);
    cartShopBox.getElementsByClassName('cart_remove')[0].addEventListener('click', removeCartItem);
    cartShopBox.getElementsByClassName('cart_quantity')[0].addEventListener('change', quantityChanged);
}


function updatetotal(){
    var cartContent = document.getElementsByClassName("cart_content")[0];
    var cartBoxes = cartContent.getElementsByClassName("cart_box");
    var total = 0;
    for(var i = 0; i < cartBoxes.length; i++){
        var cartBox = cartBoxes[i];
        var priceElement = cartBox.getElementsByClassName('cart_price')[0];
        var quantityElement = cartBox.getElementsByClassName('cart_quantity')[0];
        var price = parseFloat(priceElement.innerText.replace("£", ""));
        var quantity = quantityElement.value;
        total = total+(price*quantity);
    }    
    total = Math.round(total * 100) / 100;

    document.getElementsByClassName("total_price")[0].innerText = "£" + total;
    
}
