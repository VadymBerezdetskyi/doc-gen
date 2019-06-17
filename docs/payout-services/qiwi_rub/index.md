
## General 
 
**Code:** `qiwi_rub` 
 
**Method:** `qiwi` 
 
**Currency:** `RUB`[show -->]() 
 
**Amount limits:** from `50` to `60000` RUB  

## Fields 

### Overview 

|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`wallet_id`|✔ |`string`|`/^\+\d{1,15}$/`| 
 

### Details 
 
0. **`wallet_id`**  
 
	Type: `string` 
 
	Regexp: `/^\+\d{1,15}$/` 
 
	Required: `1` 
 
	Label:  
	: [en] Qiwi wallet  
	: [ru] Qiwi кошелек  
	: [uk] Qiwi гаманець  
 
	Hint:  
	: [en] Enter Qiwi wallet  
	: [ru] Введите Qiwi кошелек  
	: [uk] Введіть Qiwi гаманець  
 

## JSON Object 

```json
{
  "code":"qiwi_rub",
  "method":"qiwi",
  "currency":"RUB",
  "fields":[
    {
      "key":"wallet_id",
      "type":"string",
      "label":{
        "en":"Qiwi wallet",
        "ru":"Qiwi \u043a\u043e\u0448\u0435\u043b\u0435\u043a",
        "uk":"Qiwi \u0433\u0430\u043c\u0430\u043d\u0435\u0446\u044c"
      },
      "hint":{
        "en":"Enter Qiwi wallet",
        "ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 Qiwi \u043a\u043e\u0448\u0435\u043b\u0435\u043a",
        "uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c Qiwi \u0433\u0430\u043c\u0430\u043d\u0435\u0446\u044c"
      },
      "regexp":"\/^\\+\\d{1,15}$\/",
      "required":true,
      "position":1
    }
  ],
  "amount_min":50,
  "amount_max":60000
}
```  
