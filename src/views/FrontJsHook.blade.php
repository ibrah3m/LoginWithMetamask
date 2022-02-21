
$(document).ready(function () {
    // $("head").append(`<script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js"
    // type="application/javascript"></script>`);

    $.getScript("https://cdn.ethers.io/lib/ethers-5.2.umd.min.js", function () {

    });



    $("body").append(`@include('loginwithmetamsk::MetaMaskLoginTemplate')`);
});
async function metamasklogin() {
    // var ethers = require('ethers');

    if (!window.ethereum) {
        alert("No crypto wallet found. Please install it.");
    }
    const public_address = await window.ethereum.send("eth_requestAccounts");

    const provider = new ethers.providers.Web3Provider(window.ethereum);
    const signer = await provider.getSigner();

    //get nounce from the service backend 


    var metamask_data = new FormData();
    metamask_data.append("public_address", public_address.result[0]);
    $.ajax({
        url: '{{route('metamask.nonce')}}',
        type: 'POST',
        contentType: false,
        data: metamask_data,
        processData: false,
        async: false,
        headers: {
        'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },

        success: function (data) {
            nonce = data['nonce'];

        },
        error: function (jqXhr, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    })
    if (nonce) {
        message = "I am signing with nonce:" + nonce;

        signature = await signer.signMessage(message, public_address.result[0]);
        // send singature
        address = await signer.getAddress();
        // send address 
        var metamask_sign = new FormData();
        metamask_sign.append("public_address", public_address.result[0]);
        metamask_sign.append("signature", signature);
        metamask_sign.append("message", message);

        $.ajax({
            url: '{{route('metamask.signature')}}',
            type: 'POST',
            contentType: false,
            data: metamask_sign,
            processData: false,
            async: false,
            headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },

            success: function (data) {
                // redirect for home 
                location.reload();

            },
            error: function (jqXhr, textStatus, errorThrown) {
                console.log(errorThrown);
            }
        })
    }
}
