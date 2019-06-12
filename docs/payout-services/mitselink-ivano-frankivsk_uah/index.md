## General 
**Code:** `mitselink-ivano-frankivsk_uah`  
**Method:** `mitselink-ivano-frankivsk`  
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
: [en] The phone  
: [uk] Телефон  
: [ru] Телефон  
Hint:  
: [en] Enter the phone  
: [uk] Введіть телефон  
: [ru] Введите телефон  
## JSON Object 
```json
 {"code":"mitselink-ivano-frankivsk_uah","method":"mitselink-ivano-frankivsk","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"The phone","uk":"\u0422\u0435\u043b\u0435\u0444\u043e\u043d","ru":"\u0422\u0435\u043b\u0435\u0444\u043e\u043d"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Enter the phone","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u0442\u0435\u043b\u0435\u0444\u043e\u043d","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0442\u0435\u043b\u0435\u0444\u043e\u043d"},"example":"0672874379"}],"amount_min":2,"amount_max":14999}```  
