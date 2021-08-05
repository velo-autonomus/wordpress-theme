document.addEventListener('DOMContentLoaded', () => {
    var donationWrapper = document.querySelector('.velo-donation-wrapper');
    if(donationWrapper) {
        donationWrapper.querySelector('input').addEventListener('keyup', (ev) => {
            if(ev.target.value) donationWrapper.querySelector('a').classList.remove('disabled');
            else donationWrapper.querySelector('a').classList.add('disabled');
            donationWrapper.querySelector('a').href = `https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=${encodeURIComponent(donationWrapper.getAttribute('email'))}&lc=US&item_name=${donationWrapper.getAttribute('subject')}&no_note=0&cn=&currency_code=${encodeURIComponent(donationWrapper.getAttribute('currency'))}&amount=${encodeURIComponent(ev.target.value)}&bn=PP-DonationsBF:btn_donateCC_LG.gif:NonHosted`;
        })
    }
})