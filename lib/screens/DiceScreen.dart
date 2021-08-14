import 'package:flutter/material.dart';
import 'package:team_luna/utilities/constant.dart';
import 'dart:math';

class DiceApp extends StatefulWidget {
  @override
  _DiceAppState createState() => _DiceAppState();
}

class _DiceAppState extends State<DiceApp> {
  @override
  var userDiceScore = 0;
  var computerDiceScore = 0;
  var DiceRoll = Random().nextInt(6) + 1;

  RollingDice({int DiceNumber}) {
    return Container(
      child: Material(
        color: Colors.white12,
        child: InkWell(
            splashColor: Colors.red,
            child: SizedBox(
              height: 100.0,
              width: 100.0,
              child: Image.asset('images/Dice/dice${DiceNumber}.png'),
            ),
            onTap: () {
              setState(() {
                if (DiceNumber == DiceRoll) {
                  userDiceScore++;
                  DiceRoll = Random().nextInt(6) + 1;
                } else {
                  computerDiceScore++;
                  DiceRoll = Random().nextInt(6) + 1;
                }
              });
            }),
      ),
    );
  }

  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(
          'Rollig Dice',
          style: appBarLabel,
        ),
        backgroundColor: Colors.redAccent,
        centerTitle: true,
      ),
      backgroundColor: Colors.black12,
      body: SafeArea(
        child: Stack(
          children: <Widget>[
            Container(
              height: double.infinity,
              child: SingleChildScrollView(
                physics: AlwaysScrollableScrollPhysics(),
                padding: EdgeInsets.symmetric(
                  horizontal: 20,
                ),
                child: Column(
                  mainAxisAlignment: MainAxisAlignment.center,
                  children: <Widget>[
                    Center(
                      child: Text(
                        'Score Board',
                        style: appBarLabel,
                      ),
                    ),
                    Center(
                      child: Text(
                        'Computer Score ${computerDiceScore} : ${userDiceScore} Your Score',
                        style: labelTextStyle,
                      ),
                    ),
                    Column(
                      children: <Widget>[
                        Container(
                          width: 250,
                          height: 250,
                          alignment: Alignment.center,
                          decoration: BoxDecoration(color: Colors.red.shade50,
                              // shape: BoxShape.circle,
                              boxShadow: [
                                BoxShadow(
                                  color: Colors.black,
                                  offset: Offset(6.0, 6.0),
                                ),
                              ]),
                          child: Image.asset(
                            'images/Dice/dice${DiceRoll}.png',
                          ),
                        ),
                        SizedBox(
                          height: 40.0,
                        ),
                        Row(
                          mainAxisAlignment: MainAxisAlignment.center,
                          children: <Widget>[
                            RollingDice(DiceNumber: 1),
                            SizedBox(
                              width: 30.0,
                            ),
                            RollingDice(DiceNumber: 2),
                            SizedBox(
                              width: 30.0,
                            ),
                            RollingDice(DiceNumber: 3),
                          ],
                        ),
                        Row(
                          mainAxisAlignment: MainAxisAlignment.center,
                          children: <Widget>[
                            RollingDice(DiceNumber: 4),
                            SizedBox(
                              width: 30.0,
                            ),
                            RollingDice(DiceNumber: 5),
                            SizedBox(
                              width: 30.0,
                            ),
                            RollingDice(DiceNumber: 6),
                          ],
                        ),
                      ],
                    ),
                  ],
                ),
              ),
            ),
          ],
        ),
      ),
    );
  }
}
