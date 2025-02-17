const budgetForm = document.getElementById('budgetForm');
const budgetRange = document.getElementById('budgetRange');
const skipBtn = document.getElementById('skipBtn');

function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
};

budgetForm.addEventListener('submit', async event => {
    event.preventDefault();
    await redirectToNextPage();
});

skipBtn.addEventListener('click', async function () {
    skipBtn.disabled = true;
    await redirectToNextPage();
    skipBtn.disabled = false;
});

async function redirectToNextPage() {
    const budgetOptions = ["$200 - $400", "$400 - $800", "$800 - $1000", "$1000+"];
    let budgetIndex = parseInt(budgetRange.value, 10) - 1;
    let budget = budgetOptions[budgetIndex];

    const id = getQueryParam("id");
    const manuscript_ready = getQueryParam("manuscript_ready");
    const subject_area = getQueryParam("subject_area");
    const journal_type = getQueryParam("journal_type");
    const timeline = getQueryParam("timeline");

    const nextUrl = `../brief/personal-info.php?id=${id}&manuscript_ready=${encodeURIComponent(manuscript_ready)}&subject_area=${encodeURIComponent(subject_area)}&journal_type=${encodeURIComponent(journal_type)}&timeline=${encodeURIComponent(timeline)}&budget=${encodeURIComponent(budget)}`;

    try {
        const res = await fetch("https://form-submission-google-sheet.vercel.app/writeright-offer/budget", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ budget, id }),
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
