function listItem() {
    var itemName = document.getElementById("itemName").value;
    var category = document.getElementById("category").value;
    var description = document.getElementById("description").value;
    var reservePrice = document.getElementById("reservePrice").value;
    var buyNowPrice = document.getElementById("buyNowPrice").value;
    var startPrice = document.getElementById("startPrice").value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "list_item.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            alert(xhr.responseText);
        }
    };
    xhr.send("itemName=" + encodeURIComponent(itemName) +
             "&category=" + encodeURIComponent(category) +
             "&description=" + encodeURIComponent(description) +
             "&reservePrice=" + encodeURIComponent(reservePrice) +
             "&buyNowPrice=" + encodeURIComponent(buyNowPrice) +
             "&startPrice=" + encodeURIComponent(startPrice));
}
