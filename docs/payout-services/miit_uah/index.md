## General 
**Code:** `miit_uah`  
**Method:** `miit`  
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
: [en] The contract number (all digits to the dash)  
: [uk] Номер договору (всі цифри до тире)  
: [ru] Номер договора (все цифры в тире)  
Hint:  
: [en] Enter the contract number (all digits to the dash)  
: [uk] Введіть номер договору (всі цифри до тире)  
: [ru] Введите номер договора (все цифры в тире)  
## JSON Object 
```json
 {"code":"miit_uah","method":"miit","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"The contract number (all digits to the dash)","uk":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0443 (\u0432\u0441\u0456 \u0446\u0438\u0444\u0440\u0438 \u0434\u043e \u0442\u0438\u0440\u0435)","ru":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0430 (\u0432\u0441\u0435 \u0446\u0438\u0444\u0440\u044b \u0432 \u0442\u0438\u0440\u0435)"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Enter the contract number (all digits to the dash)","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0443 (\u0432\u0441\u0456 \u0446\u0438\u0444\u0440\u0438 \u0434\u043e \u0442\u0438\u0440\u0435)","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0430 (\u0432\u0441\u0435 \u0446\u0438\u0444\u0440\u044b \u0432 \u0442\u0438\u0440\u0435)"},"example":"6873"}],"amount_min":2,"amount_max":14999}```  
