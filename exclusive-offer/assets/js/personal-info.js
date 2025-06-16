function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
};

console.log("object")

const skipBtn = document.getElementById('skipBtn');

skipBtn.addEventListener('click', async function () {
    console.log("clicked")
    skipBtn.disabled = true;
    await redirectToNextPage();
    skipBtn.disabled = false;
});

async function redirectToNextPage() {

    const email = document.getElementById("email").value
    const phone = document.getElementById("phone").value
    const country = document.getElementById("country").value
    const id = getQueryParam("id");

    if(!email || !phone || !country || !id){
        alert("Required Fields are missing")
        return
    }

    const nextUrl = `../formsubmitted.php`;

    try {
        const res = await fetch("https://form-submission-google-sheet.vercel.app/writeright-offer/personal_info", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ country, id, email, phone }),
        });
        if (res.ok) {
            window.location.href = nextUrl;
        } else {
            throw new Error('Failed to submit form');
        }
    } catch (error) {
        console.log(error);
    };
};