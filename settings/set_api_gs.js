const {google} = require('googleapis');
const keys = require('./keys.json');

const client = new google.auth.JWT(
    keys.client_email,
    null,
    keys.private_key,
    ['https://www.googleapis.com/auth/spreadsheets']
);

client.authorize((err, tokens) => {
    if (err) {
        console.log(err);
        return;
    } else {
        console.log('Connected');
        gsrun(client);
    }
});

async function gsrun(cl) {
    const gsapi = google.sheets({version: 'v4', auth: cl});
    const opt = {
        spreadsheetId : '1dvGIpn0yJv8cRk7Sw5G3xcoLcYHpe_1UB2HcE4f9k34',
        range : 'Лист1!A1:C5'
    };
    const data = await gsapi.spreadsheets.values.get(opt);
    const opt2 = {
        spreadsheetId : '1dvGIpn0yJv8cRk7Sw5G3xcoLcYHpe_1UB2HcE4f9k34',
        range : 'Лист1!E1',
        valueInputOption: 'USER_ENTERED',
        resource : {values : data.data.values}
    };
    await gsapi.spreadsheets.values.update(opt2);
}  