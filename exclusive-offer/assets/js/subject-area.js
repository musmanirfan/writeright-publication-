const subjectAreaForm = document.getElementById('subjectAreaForm');
const subjectArea = document.getElementById('subjectArea');
const skipBtn = document.getElementById('skipBtn');
const skipText = document.getElementById('skipText');

function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
};

subjectArea.addEventListener('input', () => {
    if (subjectArea.value.trim() !== '') {
        skipText.innerText = 'Next';
    } else {
        skipText.innerText = 'Skip';
    }
});

subjectAreaForm.addEventListener('submit', async event => {
    event.preventDefault();
    await redirectToNextPage();
});

skipBtn.addEventListener('click', async function () {
    skipBtn.disabled = true;
    await redirectToNextPage();
    skipBtn.disabled = false;
});

async function redirectToNextPage() {
    let subject_area = subjectArea.value.trim();
    const id = getQueryParam("id");
    const manuscript_ready = getQueryParam("manuscript_ready");

    if (!subject_area) {
        subject_area = "N/A";
    };

    const nextUrl = `../brief/journal-type.php?id=${id}&manuscript_ready=${encodeURIComponent(manuscript_ready)}&subject_area=${encodeURIComponent(subject_area)}`;

    try {
        const res = await fetch("https://form-submission-google-sheet.vercel.app/writeright-offer/subject-area", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ subject_area, id }),
        });
        if (res.ok) {
            window.location.href = nextUrl
        } else {
            throw new Error('Failed to submit form');
        }
    } catch (error) {
        console.log(error)
    };
};