const submit = async val => {
  const yesBtn = document.getElementById("yesBtn")
  const noBtn = document.getElementById("noBtn")
  const id = window.btoa(val + Math.floor(Math.random() * 90) + 10 + new Date().getTime() + Math.floor(Math.random() * 90) + 10);
  yesBtn.disabled = true;
  noBtn.disabled = true;
  try {
    const res = await fetch("https://form-submission-google-sheet.vercel.app/writeright-offer/manuscript-ready", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ manuscript_ready: val, id })
    });
    if (res.ok) {
      window.location.href = `brief/subject-area.php?id=${encodeURIComponent(id)}&manuscript_ready=${val}`;
    } else {
      throw new Error('Failed to update form');
    }
  } catch (error) {
    alert("Error while Submitting")
    console.log(error)
  } finally {
    yesBtn.disabled = false;
    noBtn.disabled = false;
  }
}