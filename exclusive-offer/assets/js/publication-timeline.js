const standard = document.getElementById("standard");
const fastTrack = document.getElementById("fastTrack");
const urgent = document.getElementById("urgent");
const skipBtn = document.getElementById('skipBtn');
const skipText = document.getElementById('skipText');
const timelineForm = document.getElementById('timelineForm');

const timelineOptions = [standard, fastTrack, urgent];
let selectedTimeline = "N/A";

timelineOptions.forEach(option => {
    option.addEventListener("change", function () {
        timelineOptions.forEach(opt => {
            if (opt !== option) opt.checked = false;
        });
        updateSkipText();
    });
});

function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
};

function updateSkipText() {
    const selectedOption = timelineOptions.find(option => option.checked);
    
    skipText.innerText = selectedOption ? "Next" : "Skip";
    
    const journalLabels = {
        standard: "Standard",
        fastTrack: "Fast-Track",
        urgent: "Urgent"
    };
    
    selectedTimeline = selectedOption ? journalLabels[selectedOption.id] : "N/A";
}

timelineForm.addEventListener('submit', async event => {
    event.preventDefault();
    await redirectToNextPage();
});

skipBtn.addEventListener('click', async function () {
    skipBtn.disabled = true;
    await redirectToNextPage();
    skipBtn.disabled = false;
});

async function redirectToNextPage() {
    const id = getQueryParam("id");
    const manuscript_ready = getQueryParam("manuscript_ready");
    const subject_area = getQueryParam("subject_area");
    const journal_type = getQueryParam("journal_type");

    const nextUrl = `../brief/budget.php?id=${id}&manuscript_ready=${encodeURIComponent(manuscript_ready)}&subject_area=${encodeURIComponent(subject_area)}&journal_type=${encodeURIComponent(journal_type)}&timeline=${encodeURIComponent(selectedTimeline)}`;

    try {
        const res = await fetch("https://form-submission-google-sheet.vercel.app/writeright-offer/timeline", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ timeline: selectedTimeline, id }),
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
