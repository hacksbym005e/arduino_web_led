//
//  ViewController.h
//  Arduino_Web_LED
//
//  Created by leigh on 17/05/2015.
//  Copyright (c) 2015 leigh. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface ViewController : UIViewController

@property (weak, nonatomic) IBOutlet UIWebView *WebView;
@property (weak, nonatomic) IBOutlet UISlider *RedSlider;
@property (weak, nonatomic) IBOutlet UISlider *GreenSlider;
@property (weak, nonatomic) IBOutlet UISlider *BlueSlider;
@property (weak, nonatomic) IBOutlet UITextField *IPAddress;

@end

