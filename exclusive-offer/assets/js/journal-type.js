const hightImpact = document.getElementById("hightImpact");
const opanAccess = document.getElementById("opanAccess");
const reputableJournal = document.getElementById("reputableJournal");
const skipBtn = document.getElementById('skipBtn');
const skipText = document.getElementById('skipText');
const journalTypeForm = document.getElementById('journalTypeForm');

hightImpact.addEventListener("change", updateSkipText);
opanAccess.addEventListener("change", updateSkipText);
reputableJournal.addEventListener("change", updateSkipText);

function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
};

const journalOptions = {
    hightImpact,
    opanAccess,
    reputableJournal,
};

let selectedJournal = "N/A";

function updateSkipText() {
    const selectedOptions = Object.keys(journalOptions).filter(key => journalOptions[key].checked);
    
    skipText.innerText = selectedOptions.length ? "Next" : "Skip";
    
    const journalLabels = {
        hightImpact: "High-Impact",
        opanAccess: "Open-Access",
        reputableJournal: "Reputable-Journal"
    };
    
    selectedJournal = selectedOptions.map(option => journalLabels[option]).join(" + ") || "N/A";
}

journalTypeForm.addEventListener('submit', async event => {
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
    const nextUrl = `../brief/publication-timeline.php?id=${id}&manuscript_ready=${encodeURIComponent(manuscript_ready)}&subject_area=${encodeURIComponent(subject_area)}&journal_type=${encodeURIComponent(selectedJournal)}`;
    try {
        const res = await fetch("https://form-submission-google-sheet.vercel.app/writeright-offer/journal-type", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ journal_type: selectedJournal, id }),
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