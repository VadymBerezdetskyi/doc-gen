## General 
**Code:** `payeer_eur`  
**Method:** `payeer`  
**Currency:** `EUR` [show -->]() 
**Amount limits:** from `0.02`  to `1000000`  EUR ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`account_number` |✔ |`string` |`/^[P]{1}[0-9]{7,15}$/` | 
 
### Details 
0 **`account_number` **  
Type: `string`  
Regexp: `/^[P]{1}[0-9]{7,15}$/`  
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
 {"code":"payeer_eur","method":"payeer","currency":"EUR","fields":[{"key":"account_number","type":"string","label":{"en":"Account number","ru":"\u041d\u043e\u043c\u0435\u0440 \u0441\u0447\u0435\u0442\u0430","uk":"\u041d\u043e\u043c\u0435\u0440 \u0440\u0430\u0445\u0443\u043d\u043a\u0443"},"hint":{"en":"Enter account number","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043d\u043e\u043c\u0435\u0440 \u0441\u0447\u0435\u0442\u0430","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043d\u043e\u043c\u0435\u0440 \u0440\u0430\u0445\u0443\u043d\u043a\u0443"},"regexp":"\/^[P]{1}[0-9]{7,15}$\/","required":true,"position":1}],"amount_min":0.02,"amount_max":1000000}```  
