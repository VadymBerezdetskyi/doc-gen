## General 
**Code:** `litecoin_ltc`  
**Method:** `litecoin`  
**Currency:** `LTC` [show -->]() 
**Amount limits:** from `1.0E-5`  to `100`  LTC ## Fields 
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
: [en] Litecoin wallet  
: [ru] Litecoin кошелек  
: [uk] Litecoin гаманець  
Hint:  
: [en] Enter Litecoin wallet  
: [ru] Введите Litecoin кошелек  
: [uk] Введіть Litecoin гаманець  
## JSON Object 
```json
 {"code":"litecoin_ltc","method":"litecoin","currency":"LTC","fields":[{"key":"wallet_id","type":"string","label":{"en":"Litecoin wallet","ru":"Litecoin \u043a\u043e\u0448\u0435\u043b\u0435\u043a","uk":"Litecoin \u0433\u0430\u043c\u0430\u043d\u0435\u0446\u044c"},"hint":{"en":"Enter Litecoin wallet","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 Litecoin \u043a\u043e\u0448\u0435\u043b\u0435\u043a","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c Litecoin \u0433\u0430\u043c\u0430\u043d\u0435\u0446\u044c"},"regexp":"\/^\\+\\d{1,15}$\/","required":true,"position":1}],"amount_min":1.0e-5,"amount_max":100}```  
