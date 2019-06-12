## General 
**Code:** `bitcoin_btc`  
**Method:** `bitcoin`  
**Currency:** `BTC` [show -->]() 
**Amount limits:** from `1.0E-5`  to `50`  BTC ## Fields 
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
: [en] Bitcoin wallet  
: [ru] Bitcoin кошелек  
: [uk] Bitcoin гаманець  
Hint:  
: [en] Enter Bitcoin wallet  
: [ru] Введите Bitcoin кошелек  
: [uk] Введіть Bitcoin гаманець  
## JSON Object 
```json
 {"code":"bitcoin_btc","method":"bitcoin","currency":"BTC","fields":[{"key":"wallet_id","type":"string","label":{"en":"Bitcoin wallet","ru":"Bitcoin \u043a\u043e\u0448\u0435\u043b\u0435\u043a","uk":"Bitcoin \u0433\u0430\u043c\u0430\u043d\u0435\u0446\u044c"},"hint":{"en":"Enter Bitcoin wallet","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 Bitcoin \u043a\u043e\u0448\u0435\u043b\u0435\u043a","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c Bitcoin \u0433\u0430\u043c\u0430\u043d\u0435\u0446\u044c"},"regexp":"\/^\\+\\d{1,15}$\/","required":true,"position":1}],"amount_min":1.0e-5,"amount_max":50}```  
