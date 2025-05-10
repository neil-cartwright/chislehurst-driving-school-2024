/* get all years between startyear and current year */

export const generateYearsBetween = (startYear = 2000, endYear) => {
    const endDate = endYear || new Date().getFullYear();

    let years = [];

    for (var i = startYear; i <= endDate; i++) {
        years.push(startYear);

        startYear++;
    }

    return years;
};

/* selects elements ready for copying to excel */
export const selectElementContents = (el) => {
    var range = document.createRange();
    range.selectNodeContents(el);
    var sel = window.getSelection();
    sel.removeAllRanges();
    sel.addRange(range);
};

export default generateYearsBetween;
