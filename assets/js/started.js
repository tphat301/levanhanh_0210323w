window.addEventListener('load', function() {
    // EVENT SERVICE & TABLE PRICE
    const stepItems = document.querySelectorAll('.step-title span');
    const stepContents = document.querySelectorAll('.step-content-tab');
    [...stepItems].forEach(stepItem => stepItem.addEventListener('click', function(e) {
        [...stepItems].forEach(stepItem=>stepItem.classList.remove('active'));
        e.target.classList.add('active');
        let stepNumber = e.target.dataset.step;
        [...stepContents].forEach(stepContentItem => {
            stepContentItem.classList.remove('active');
            if(stepContentItem.getAttribute('data-step') === stepNumber) {
                stepContentItem.classList.add('active');
            }
        });
    }));
});