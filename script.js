// Show the modal with the story details and image
function showStory(title, imageUrl) {
    var modal = document.getElementById("storyModal");
    var storyTitle = document.getElementById("storyTitle");
    var storyContent = document.getElementById("storyContent");
    var storyImage = document.getElementById("storyImage");
    var extraContent = document.getElementById("extraContent");
    var readMoreBtn = document.getElementById("readMoreBtn");

    // Reset "Read More" content on open
    extraContent.style.display = "none";
    readMoreBtn.style.display = "inline-block";

    storyTitle.textContent = title;
    storyImage.src = imageUrl;

    // Custom content for each story
    switch (title) {
        case 'Extreme Weather Conditions':
            storyContent.textContent = "Extreme weather conditions are becoming more frequent due to climate change...";
            extraContent.textContent = "In recent years, storms, hurricanes, and floods have devastated regions around the world, causing loss of life, destruction of property, and economic damage.";
            break;
        case 'Droughts':
            storyContent.textContent = "Droughts are intensifying globally, causing severe water shortages...";
            extraContent.textContent = "Droughts have profound effects on agriculture, leading to crop failures, food shortages, and water crises in regions dependent on rainwater.";
            break;
        case 'Wildfires':
            storyContent.textContent = "Wildfires are spreading faster and wider as a result of drier conditions...";
            extraContent.textContent = "With rising temperatures and prolonged droughts, wildfires have been burning more frequently, destroying forests, homes, and wildlife habitats.";
            break;
        case 'Melting Ice Caps':
            storyContent.textContent = "Melting ice caps are contributing to rising sea levels and disrupted ecosystems...";
            extraContent.textContent = "As polar ice melts, the balance of marine life is affected, and communities around the world are grappling with the threat of rising sea levels.";
            break;
        case 'Rising Sea Level':
            storyContent.textContent = "Rising sea levels are threatening coastal cities and habitats worldwide...";
            extraContent.textContent = "Coastal erosion, flooding, and the displacement of millions of people are growing concerns as sea levels rise faster than predicted.";
            break;
        case 'Biodiversity Loss':
            storyContent.textContent = "Climate change is causing biodiversity loss by altering habitats and ecosystems...";
            extraContent.textContent = "Species extinction rates are accelerating due to habitat destruction, extreme weather events, and changing climates, threatening ecosystems globally.";
            break;
        default:
            storyContent.textContent = "This is where the detailed story will go.";
            extraContent.textContent = "Additional content will be shown here when you click 'Read More'.";
    }

    modal.style.display = "flex";
}

// Close the modal
function closeModal() {
    var modal = document.getElementById("storyModal");
    modal.style.display = "none";
}

// Show additional content when "Read More" is clicked
function readMore() {
    var extraContent = document.getElementById("extraContent");
    var readMoreBtn = document.getElementById("readMoreBtn");
    extraContent.style.display = "block";
    readMoreBtn.style.display = "none";
}
