## General 
**Code:** `finet_uah`  
**Method:** `finet`  
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
: [en] Specify payment ID  
: [uk] Ідентифікатор для платежу  
: [ru] Идентификатор для платежа  
Hint:  
: [en] Specify payment ID  
: [uk] Вкажіть ідентифікатор для платежу  
: [ru] Укажите идентификатор для платежа  
## JSON Object 
```json
 {"code":"finet_uah","method":"finet","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Specify payment ID","uk":"\u0406\u0434\u0435\u043d\u0442\u0438\u0444\u0456\u043a\u0430\u0442\u043e\u0440 \u0434\u043b\u044f \u043f\u043b\u0430\u0442\u0435\u0436\u0443","ru":"\u0418\u0434\u0435\u043d\u0442\u0438\u0444\u0438\u043a\u0430\u0442\u043e\u0440 \u0434\u043b\u044f \u043f\u043b\u0430\u0442\u0435\u0436\u0430"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Specify payment ID","uk":"\u0412\u043a\u0430\u0436\u0456\u0442\u044c \u0456\u0434\u0435\u043d\u0442\u0438\u0444\u0456\u043a\u0430\u0442\u043e\u0440 \u0434\u043b\u044f \u043f\u043b\u0430\u0442\u0435\u0436\u0443","ru":"\u0423\u043a\u0430\u0436\u0438\u0442\u0435 \u0438\u0434\u0435\u043d\u0442\u0438\u0444\u0438\u043a\u0430\u0442\u043e\u0440 \u0434\u043b\u044f \u043f\u043b\u0430\u0442\u0435\u0436\u0430"},"example":"11120"}],"amount_min":2,"amount_max":14999}```  
