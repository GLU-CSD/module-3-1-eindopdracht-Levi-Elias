$(document).ready(function () {
    // Convert the PHP images object to an array
    const imageArray = Object.values(images);
    let currentIndex = 0;

    // Function to update the image
    function updateImage() {
        $("#shoe-image").attr("src", imageArray[currentIndex]);
    }

    // Click event for the next button
    $("#next").click(function () {
        currentIndex = (currentIndex + 1) % imageArray.length; // Loop to the first image
        updateImage();
    });

    // Click event for the previous button
    $("#prev").click(function () {
        currentIndex = (currentIndex - 1 + imageArray.length) % imageArray.length; // Loop to the last image
        updateImage();
    });

    // Initialize the first image
    updateImage();
});