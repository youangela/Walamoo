const form = document.getElementById('fileUploadForm');

form.addEventListener('submit', async (event) => {
    event.preventDefault(); // Prevent the default form submission behavior

    const fileInput = document.querySelector('input[type="file"]');
    const file = fileInput.files[0]; // Get the selected file

    if (file) {
        const formData = new FormData();
        formData.append('file', file); // Append the file to the FormData

        try {
            const response = await fetch('/api/upload', {
                method: 'POST',
                body: formData,
            });

            if (response.ok) {
                console.log('File uploaded successfully!');
                // Handle any further actions after successful upload
            } else {
                console.error('Error uploading the file.');
            }
        } catch (error) {
            console.error('An error occurred:', error);
        }
    } else {
        console.warn('No file selected.');
    }
});
