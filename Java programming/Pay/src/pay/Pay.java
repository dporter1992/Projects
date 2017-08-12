/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pay;

import java.util.Scanner;

public class Pay {

 
    public static void main(String[] args) {
       
        Scanner in = new Scanner(System.in);
        System.out.printf("Please enter how many that you worked: ");
        double hours = in.nextDouble();        
        System.out.printf("Please enter your hourly pay: "); 
        double rate = in.nextDouble(); 
        double grosspay = gpay(rate,hours); 
        double netpay = npay(rate,hours); 
        System.out.println("Gross pay: " + grosspay + ", your netpay after withholdings is: " + netpay); 
        
    }
     
     static double gpay(double hours, double rate){ 
     return hours*rate; 
     } 

     static double npay(double hours, double rate){ 
     double withholding = gpay(hours,rate); 
     if (withholding < 40) return (withholding-(withholding*0.10));
     else if (withholding > 40) return (withholding-(withholding*0.13)); 
     return withholding;
 }
}
 
