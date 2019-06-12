## General 
**Code:** `aries_uah`  
**Method:** `aries`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `2`  to `14999`  UAH ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`client_id` |✔ |`string` |`/^\d{1,128}$/` | 
 
### Details 
0 **`client_id` **  
Type: `string`  
Regexp: `/^\d{1,128}$/`  
Required: `1`  
Label:  
: [en] The Contract Number  
: [uk] Номер Договору  
: [ru] Номер Договора  
Hint:  
: [en] Enter the Contract Number  
: [uk] Введіть номер Договору  
: [ru] Введите номер Договора  
## JSON Object 
```json
 {"code":"aries_uah","method":"aries","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"The Contract Number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0414\u043e\u0433\u043e\u0432\u043e\u0440\u0443","ru":"\u041d\u043e\u043c\u0435\u0440 \u0414\u043e\u0433\u043e\u0432\u043e\u0440\u0430"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Enter the Contract Number","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043d\u043e\u043c\u0435\u0440 \u0414\u043e\u0433\u043e\u0432\u043e\u0440\u0443","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043d\u043e\u043c\u0435\u0440 \u0414\u043e\u0433\u043e\u0432\u043e\u0440\u0430"},"example":"399"}],"amount_min":2,"amount_max":14999}```  
