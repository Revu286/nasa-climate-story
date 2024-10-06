// Initialize the map and set its view to a default location (e.g., New York)
var map = L.map('map').setView([40.7128, -74.0060], 13); // New York as default

// Add OSM Tile Layer to the map
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap contributors'
}).addTo(map);

// Create an empty marker variable
var marker;

// Function to update the form with selected coordinates
function updateCoordinates(lat, lng) {
    document.getElementById('coordinates').value = lat.toFixed(6) + ', ' + lng.toFixed(6);
}

// Reverse geocoding function to get address
function getAddress(lat, lng) {
    var url = `https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${lat}&lon=${lng}`;

    fetch(url)
        .then(response => response.json())
        .then(data => {
            if (data.address) {
                var address = `${data.address.city ? data.address.city + ', ' : ''}${data.address.country}`;
                document.getElementById('address').value = address;
            } else {
                document.getElementById('address').value = 'Address not found';
            }
        })
        .catch(error => {
            console.error('Error fetching address:', error);
            document.getElementById('address').value = 'Error fetching address';
        });
}

// Event listener for map clicks
map.on('click', function(e) {
    var lat = e.latlng.lat;
    var lng = e.latlng.lng;

    // If a marker already exists, remove it
    if (marker) {
        map.removeLayer(marker);
    }

    // Add a new marker at the clicked location
    marker = L.marker([lat, lng]).addTo(map);

    // Update the coordinates input field
    updateCoordinates(lat, lng);

    // Get address from the coordinates
    getAddress(lat, lng);
});

// Show modal on form submission
function showAlert() {
    document.getElementById('successModal').style.display = "block";
    return false; // Prevent form submission to simulate success
}

// Close the modal
function closeModal() {
    document.getElementById('successModal').style.display = "none";
}

// Close the modal when the user clicks anywhere outside of the modal
window.onclick = function(event) {
    var modal = document.getElementById('successModal');
    if (event.target == modal) {
        closeModal();
    }
}
