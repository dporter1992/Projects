/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cointoss.java;

public class CoinToss {

    
    public static void main(String[] args) {
     
        int loopCount = 1;
    
     
     while(loopCount < 10){
     
           if (Math.random() < 0.5){
			System.out.println("Heads");
                         System.out.println(100 * loopCount/10 + "%");
		}else{
			System.out.println("Tails");
                        System.out.println(100 * loopCount/10 + "%");
                         loopCount = loopCount + 1;
                          
		}
    }
  }
}

    

