## General 
**Code:** `advcash_wallet_gbp`  
**Method:** `advcash_wallet`  
**Currency:** `GBP` [show -->]() 
**Amount limits:** from `0.01`  to `3000`  GBP ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`wallet_id` |✔ |`string` |`/^G\d{12}$/` | 
 
### Details 
0 **`wallet_id` **  
Type: `string`  
Regexp: `/^G\d{12}$/`  
Required: `1`  
Label:  
: [en] Account number  
: [ru] Номер счета  
: [uk] Номер рахунку  
Hint:  
: [en] Enter account number  
: [ru] Введите номер счета  
: [uk] Введіть номер рахунку  
## JSON Object 
```json
 {"code":"advcash_wallet_gbp","method":"advcash_wallet","currency":"GBP","fields":[{"key":"wallet_id","type":"string","label":{"en":"Account number","ru":"\u041d\u043e\u043c\u0435\u0440 \u0441\u0447\u0435\u0442\u0430","uk":"\u041d\u043e\u043c\u0435\u0440 \u0440\u0430\u0445\u0443\u043d\u043a\u0443"},"hint":{"en":"Enter account number","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043d\u043e\u043c\u0435\u0440 \u0441\u0447\u0435\u0442\u0430","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043d\u043e\u043c\u0435\u0440 \u0440\u0430\u0445\u0443\u043d\u043a\u0443"},"regexp":"\/^G\\d{12}$\/","required":true,"position":1}],"amount_min":0.01,"amount_max":3000}```  
