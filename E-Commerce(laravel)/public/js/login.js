function save(title, quantity, price, image) {
    {
        var name1 = [title];
        var key1 = "title";
        var keyID1 = localStorage.length/4;
        localStorage[key1 + keyID1] = name1;
    }
    {
        var name2 = [quantity];
        var key2 = "quantity";
        localStorage[key2 + keyID1] = name2;
    }
    {
        var name3 = [price];
        var key3 = "price";
        localStorage[key3 + keyID1] = name3;
    }
    {
        var name4 = [image];
        var key4 = "image";
        localStorage[key4 + keyID1] = name4;
    }

}

for (var i = 0; i < localStorage.length; i++) {
    var x = localStorage.getItem(localStorage.key(2));
    var y = localStorage.getItem(localStorage.key(0));
    var z = localStorage.getItem(localStorage.key(3));
    var b = localStorage.getItem(localStorage.key(1));

    document.getElementById('title').innerHTML = x;
    document.getElementById("quantity").innerHTML = y;
    document.getElementById("price").innerHTML = z;
    document.getElementById("image").innerHTML = b;
}
function sup() {
    localStorage.clear();
}
