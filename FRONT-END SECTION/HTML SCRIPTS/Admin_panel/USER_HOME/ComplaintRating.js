var rate_scanner  = document.getElementById("customer_rating");
var output_rating = document.getElementById("rated");
output_rating.innerHTML = rate_scanner.value;

rate_scanner.oninput = function() {
    output_rating.innerHTML = this.value;
}
