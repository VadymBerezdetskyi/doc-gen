## General 
**Code:** `ethereum_eth`  
**Method:** `ethereum`  
**Currency:** `ETH` [show -->]() 
**Amount limits:** from `1.0E-5`  to `100`  ETH ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`wallet_id` |✔ |`string` |`/^\+\d{1,15}$/` | 
 
### Details 
0 **`wallet_id` **  
Type: `string`  
Regexp: `/^\+\d{1,15}$/`  
Required: `1`  
Label:  
: [en] Ethereum wallet  
: [ru] Ethereum кошелек  
: [uk] Ethereum гаманець  
Hint:  
: [en] Enter Ethereum wallet  
: [ru] Введите Ethereum кошелек  
: [uk] Введіть Ethereum гаманець  
## JSON Object 
```json
 {"code":"ethereum_eth","method":"ethereum","currency":"ETH","fields":[{"key":"wallet_id","type":"string","label":{"en":"Ethereum wallet","ru":"Ethereum \u043a\u043e\u0448\u0435\u043b\u0435\u043a","uk":"Ethereum \u0433\u0430\u043c\u0430\u043d\u0435\u0446\u044c"},"hint":{"en":"Enter Ethereum wallet","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 Ethereum \u043a\u043e\u0448\u0435\u043b\u0435\u043a","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c Ethereum \u0433\u0430\u043c\u0430\u043d\u0435\u0446\u044c"},"regexp":"\/^\\+\\d{1,15}$\/","required":true,"position":1}],"amount_min":1.0e-5,"amount_max":100}```  
