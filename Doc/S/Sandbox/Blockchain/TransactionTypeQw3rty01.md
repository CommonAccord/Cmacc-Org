Ti=Order

1.sec=This is an order from <u>{from.Name.Full}</u> to the Ethereum payment system <u>{Blockchain.ID}</u> to send <u>{arg1}</u> Ether to <u>{to.Name.Full}</u> at <u>{arg2}</u> using:<ul type="none"><code>{Executable.1}</code></ul></u>  

2.sec=The order shall be tried, and the result shall be returned.

3.sec=The return is <u>{Success/Failure}</u>.

4.sec=Time of this record is <u>{Record.YMD:HMS}</u>.

=[Z/ol/s4]


Executable.1=primaryAddress = eth.accounts[0]<br>MyContract = eth.contract(abi);<br>contact = MyContract.new(arg1, arg2, ...,{from: primaryAddress, data: evmCode})