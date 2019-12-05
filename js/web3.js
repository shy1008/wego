var Web3 = require('web3');
var Accounts = require('web3-eth-accounts');

var web3 = new Web3(new Web3.providers.HttpProvider('http://121.140.127.51:7766'));

var wallet = web3.eth.accounts.decrypt(keystoreJsonV3, password);