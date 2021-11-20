document.addEventListener('copy', (event) => {
    const pagelink = `\n\nPlease, provide a link to the source: ${document.location.href}`;
    event.clipboardData.setData('text', document.getSelection() + pagelink);
    event.preventDefault();
});

