
$(document).ready(function(){
    
    web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));
    var contract = web3.eth.contract([{
        // ABI CODE
        "constant": true,
        "inputs": [{
            "name": "name",
            "type": "string"
        }],
        "name": "get",
        "outputs": [{
            "name": "",
            "type": "uint256"
        }],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    },
    {
        "constant": false,
        "inputs": [{
                "name": "name",
                "type": "string"
            },
            {
                "name": "amount",
                "type": "uint256"
            }
        ],
        "name": "set",
        "outputs": [],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
    }
]).at(
    // ADDRESS
    "0x156146db65637eb1f5d1052aeac809e0244216f2");

    var name = "이순신";
    var salary = contract.get(name);

    console.log(name,salary.toString(10));
});