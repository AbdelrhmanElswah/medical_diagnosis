document.getElementById("uploadBtn").addEventListener("click", function () {
  document.getElementById("fileInput").click();
});

document.getElementById("fileInput").addEventListener("change", function (event) {
  const file = event.target.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function (e) {
      document.getElementById("profilePicture").src = e.target.result;
    };
    reader.readAsDataURL(file);

    const formData = new FormData();
    formData.append('profile_picture', file);

    fetch('/update-profile-picture', {
      method: 'POST',
      headers: {
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
      },
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        alert("Profile picture updated successfully!");
        document.getElementById("profilePicture").src = data.profile_picture_url;
        document.getElementById("navProfilePicture").src = data.profile_picture_url;  // Update the navigation bar image
        
      } else {
        alert("Error updating profile picture.");
      }
    })
    .catch(error => {
      console.error('Error:', error);
      alert('Error uploading image. Please try again.');
    });
  }
});
